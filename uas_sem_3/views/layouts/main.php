<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/uas_sem_3/assets/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: #f5f7fa;
    font-family: "Segoe UI", Roboto, Arial, sans-serif;
    color: #2d3748;
}

.navbar-custom {
    background: #ffffff;
    border-bottom: 1px solid #e2e8f0;
}

.card {
    border: none;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,.05);
}

.btn-primary {
    background-color: #4f46e5;
    border: none;
}
.btn-primary:hover {
    background-color: #4338ca;
}

.btn-success {
    background-color: #16a34a;
    border: none;
}

.btn-warning {
    background-color: #f59e0b;
    border: none;
    color: #fff;
}

.btn-danger {
    background-color: #dc2626;
    border: none;
}

.table th {
    font-weight: 600;
    color: #475569;
}

.pagination .page-link {
    color: #4f46e5;
}
.pagination .active .page-link {
    background-color: #4f46e5;
    border-color: #4f46e5;
}
</style>
</head>

<body>

<nav class="navbar navbar-custom mb-4">
    <div class="container">
        <span class="navbar-brand fw-semibold">Sistem Manajemen Buku</span>
        <a href="/uas_sem_3/logout" class="btn btn-outline-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container pb-5">
<?= $content ?>
</div>

</body>
</html>
