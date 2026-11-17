<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laptop App')</title>
    <style>
        body { font-family: sans-serif; background: #f3f4f6; margin: 0; }
        .card { max-width: 800px; margin: 30px auto; padding: 24px; background: white; border-radius: 10px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        h1 { margin: 0; font-size: 22px; }

        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        .actions { display: flex; gap: 6px; }
        .actions form { margin: 0; }

        .btn { padding: 8px 14px; border: none; border-radius: 6px; color: white; text-decoration: none; font-size: 14px; cursor: pointer; }
        .btn-primary { background: #2563eb; }
        .btn-warning { background: #f59e0b; }
        .btn-danger { background: #ef4444; }
        .btn-light { background: #ddd; color: black; }

        label { display: block; margin-bottom: 4px; font-weight: bold; }
        input[type=text], input[type=number] { width: 100%; padding: 8px; margin-bottom: 14px; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box; }
        .form-actions { display: flex; gap: 8px; }
        .empty { text-align: center; color: gray; }

        @media (max-width: 600px) {
            .card { margin: 10px; padding: 16px; }
            thead { display: none; }
            tr, td { display: block; }
            tr { border: 1px solid #ddd; border-radius: 8px; padding: 8px; margin-bottom: 10px; }
            td { display: flex; justify-content: space-between; border: none; padding: 4px; }
            td::before { content: attr(data-label); font-weight: bold; }
            .empty::before { content: none; }
        }
    </style>
</head>
<body>
    <div class="card">
        @yield('content')
    </div>
</body>
</html>
