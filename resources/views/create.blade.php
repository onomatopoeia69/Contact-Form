<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Contact Form</title>
</head>

<body>
    <main>
        <div class=" d-flex vh-100 justify-content-center align-items-center ">

        


            <div class="w-50 p-5 shadow py-5 shadow p-3 mb-5 bg-body-tertiary rounded-5">

                <form action="{{route('submit')}}" method="POST">
                    @csrf

                @if((session('success')))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address (Receiver):</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message :</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Write Something.." required></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>
</body>

</html>