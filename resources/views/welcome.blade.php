<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IPT EMAIL FUNCTIONALITY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container col-md-6 offset-md-3 mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Send Email</h3>
            </div>
            <div class="card-body">
                <form action="{{'/send-mail'}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="email">Email To</label>
                        <input type="email" name="email" class="form-control">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control">
                        @error('subject')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea name="content" cols="10" rows="10" class="form-control"></textarea>
                        @error('content')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
