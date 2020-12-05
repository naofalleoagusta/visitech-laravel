<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Portofolio\BulkDestroyPortofolio;
use App\Http\Requests\Admin\Portofolio\DestroyPortofolio;
use App\Http\Requests\Admin\Portofolio\IndexPortofolio;
use App\Http\Requests\Admin\Portofolio\StorePortofolio;
use App\Http\Requests\Admin\Portofolio\UpdatePortofolio;
use App\Models\Portofolio;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PortofoliosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPortofolio $request
     * @return array|Factory|View
     */
    public function index(IndexPortofolio $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Portofolio::class)->processRequestAndGet(
        // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'enable'],

            // set columns to searchIn
            ['id', 'name', 'slug', 'desc']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.portofolio.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.portofolio.create');

        return view('admin.portofolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePortofolio $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePortofolio $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['slug'] = Portofolio::titleIntoSlug($sanitized['name']);
        // Store the Portofolio
        $portofolio = Portofolio::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/portofolios'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/portofolios');
    }

    /**
     * Display the specified resource.
     *
     * @param Portofolio $portofolio
     * @return void
     * @throws AuthorizationException
     */
    public function show(Portofolio $portofolio)
    {
        $this->authorize('admin.portofolio.show', $portofolio);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Portofolio $portofolio
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function edit(Portofolio $portofolio)
    {

        $this->authorize('admin.portofolio.edit', $portofolio);


        return view('admin.portofolio.edit', [
            'portofolio' => $portofolio,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePortofolio $request
     * @param Portofolio $portofolio
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePortofolio $request, Portofolio $portofolio)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['slug'] = Portofolio::titleIntoSlug($sanitized['name']);

        // Update changed values Portofolio
        $portofolio->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/portofolios'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/portofolios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPortofolio $request
     * @param Portofolio $portofolio
     * @return ResponseFactory|RedirectResponse|Response
     * @throws Exception
     */
    public function destroy(DestroyPortofolio $request, Portofolio $portofolio)
    {
        $portofolio->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPortofolio $request
     * @return Response|bool
     * @throws Exception
     */
    public function bulkDestroy(BulkDestroyPortofolio $request): Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Portofolio::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
