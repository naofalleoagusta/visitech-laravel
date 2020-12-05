<!DOCTYPE html>
<html lang="en">

<head>
    @include('/includes/head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
</head>
<style>
    .form-control {
        border: none;
        border-radius: 20px;
    }

    label {
        font-size: 12px;
        font-weight: 200;
    }

</style>

<body>
    @include('includes/navbar')
    <div class="site-blocks-cover d-flex align-items-center py-4 py-md-0 text-white"
        style="background-image: url('{{ $bg_contact }}')">
        <div class="overlay"></div>
        <div class="container mt-md-5 ">
            <form id="form-contact">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <p style="margin-bottom: 0.25rem;">Get Started</p>
                                <h2>So, Let's do this, Ask More.</h2>
                            </div>
                            <div class="col-6">
                                <label for="form-name">Name</label>
                                <input type="text" class="form-control" name="form-name" id="form-name" required
                                    placeholder="">
                            </div>
                            <div class="col-6">
                                <label for="form-phone">Phone Number</label>
                                <input type="text" class="form-control" name="form-phone" id="form-phone" placeholder=""
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="form-email">Email</label>
                                <input type="email" class="form-control" name="form-email" id="form-email"
                                    placeholder="" required>
                            </div>
                            <div class="col-12">
                                <label for="form-interest">I'm Interested In...</label>
                                <input type="text" class="form-control" name="form-interest" id="form-interest"
                                    placeholder="">
                            </div>
                            <div class="col-12">
                                <label for="form-desc">Description</label>
                                <textarea class="form-control" name="form-desc" id="form-desc" rows="4"></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-visitech save-contact">
                                    Contact Us
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('includes/footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#form-contact').submit(function(e) {
            e.preventDefault();
            let name = $("input[name=form-name]").val();
            let email = $("input[name=form-email]").val();
            let phone = $("input[name=form-phone]").val();
            let subject = $("input[name=form-interest]").val();
            let desc = $("textarea[name=form-desc]").val();
            let _token = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: 'Loading..',
                html: 'Processing Your Inquiry..',
                allowOutsideClick: false
            });
            Swal.showLoading();
            $.ajax({
                url: "/contact-us",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    subject: subject,
                    desc: desc,
                    _token: _token
                },
                error: function(response) {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong! Try again later!',
                    })
                },
                success: function(response) {
                    console.log(response);
                    Swal.close();
                    Swal.fire(
                        'Success!',
                        'Thank you for your interest in our products. We will proceed your inquiry.',
                        'success'
                    );
                    $("#form-contact")[0].reset();
                },
            });
        })
    });

</script>

</html>
