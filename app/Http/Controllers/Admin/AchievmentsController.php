<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Achievment\BulkDestroyAchievment;
use App\Http\Requests\Admin\Achievment\DestroyAchievment;
use App\Http\Requests\Admin\Achievment\IndexAchievment;
use App\Http\Requests\Admin\Achievment\StoreAchievment;
use App\Http\Requests\Admin\Achievment\UpdateAchievment;
use App\Models\Achievment;
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

class AchievmentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexAchievment $request
     * @return array|Factory|View
     */
    public function index(IndexAchievment $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Achievment::class)->processRequestAndGet(
        // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'enabled'],

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

        return view('admin.achievment.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.achievment.create');

        return view('admin.achievment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAchievment $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreAchievment $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['slug'] = Achievment::titleIntoSlug($sanitized['name']);
        // Store the Achievment
        $achievment = Achievment::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/achievments'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/achievments');
    }

    /**
     * Display the specified resource.
     *
     * @param Achievment $achievment
     * @return void
     * @throws AuthorizationException
     */
    public function show(Achievment $achievment)
    {
        $this->authorize('admin.achievment.show', $achievment);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Achievment $achievment
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function edit(Achievment $achievment)
    {
        $this->authorize('admin.achievment.edit', $achievment);


        return view('admin.achievment.edit', [
            'achievment' => $achievment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAchievment $request
     * @param Achievment $achievment
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateAchievment $request, Achievment $achievment)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['slug'] = Achievment::titleIntoSlug($sanitized['name']);

        // Update changed values Achievment
        $achievment->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/achievments'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/achievments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyAchievment $request
     * @param Achievment $achievment
     * @return ResponseFactory|RedirectResponse|Response
     * @throws Exception
     */
    public function destroy(DestroyAchievment $request, Achievment $achievment)
    {
        $achievment->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyAchievment $request
     * @return Response|bool
     * @throws Exception
     */
    public function bulkDestroy(BulkDestroyAchievment $request): Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Achievment::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
