<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="" class="btn btn-primary" >Back</a>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Donor's Name*</label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="Enter donor's name">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input id="email" class="form-control" type="text" name="email" placeholder="Eg:abc@gmail.com">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" class="form-control" type="text" name="address" placeholder="E">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile*</label>
                        <input id="mobile" class="form-control" type="text" name="mobile">
                    </div>

                    <div class="form-group">
                        <label for="blood_group">Blood-group*</label>
                        <select id="blood_group" class="form-control" name="blood_group">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>
                    <button type="submit">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>