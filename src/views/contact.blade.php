<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contact Us</title>
</head>

<body style="background-color:lightgrey">
    <div >

        <h1 class="text-center p-3">
            Contact US
        </h1>

        <div class="row">
            <div class="col-md-12">
                @if (session()->get('error'))
                <div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-danger"><i class='bx bxs-message-square-x'></i>
                        </div>
                        <div class="ms-3">
                            <div class="text-danger">{{ session()->get('error') }}</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session()->get('success'))
                <div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-success"><i class='bx bxs-check-circle'></i>
                        </div>
                        <div class="ms-3">
                            <div class="text-success">{{ session()->get('success'); }}</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
        <form class="col-md-8 offset-md-4 needs-validation" action="{{ route('contact')}}" method="post" novalidate>
            <div class="col-md-6 p-3">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" placeholder="Your Full Name" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter full name.</div>
            </div>
            <div class="col-md-6 p-3">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" placeholder="Your Email Address" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter Email Address.</div>

            </div>
            <div class="col-md-6 p-3">
                <label for="message">Message:</label>
                <textarea class="form-control" name="message" id="message" placeholder="Your Message" cols="30" rows="10" required ></textarea>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter Messages.</div>
            </div>
            <div class="p-3 col-md-6">

                <button class="form-control" type="submit" value="submit"> Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
<script>
    (() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>