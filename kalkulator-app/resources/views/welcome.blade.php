<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kalkulator App</title>
  <link rel="icon" href="{{ asset('images/calculator.png') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #EEEEEE; /* Warna latar belakang untuk seluruh halaman web */
    }
    .center-card {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>
<body>
  <div class="center-card">
    <div class="col-3">
        <div class="card text-center" style="background-color: #191919">
            <div class="card-header text-white">
                KALKULATOR
            </div>
            <div class="card-body">
                <form action="{{url('/')}}" method="POST">
                    @csrf
                    <input class="form-control form-control-lg mb-2" type="number" name="input_a">
                    <select name="operasi" class="form-select mb-2">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input class="form-control form-control-lg mb-2" type="number" name="input_b">
                    <button type="submit" class="btn btn-primary btn-lg w-100 mb-2">Hitung</button>
                    <div class="d-flex mb-2">
                        <div class="col-10 me-2">
                            <input class="form-control form-control-lg" type="number" value="{{$hasil}}" readonly>
                        </div>
                        <div class="col-1">
                            <a type="button" class="btn btn-primary btn-lg" href="{{url('/')}}">C</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
