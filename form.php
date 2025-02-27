<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Input Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 400px;">
            <h2 class="text-center mb-4">Enter Five Numbers</h2>
            <form action="process.php" method="get">
                <div class="mb-3">
                    <label for="a" class="form-label">Number A:</label>
                    <input type="number" name="a" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="b" class="form-label">Number B:</label>
                    <input type="number" name="b" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="c" class="form-label">Number C:</label>
                    <input type="number" name="c" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="d" class="form-label">Number D:</label>
                    <input type="number" name="d" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="e" class="form-label">Number E:</label>
                    <input type="number" name="e" class="form-control">
                </div>

                <button type="submit" class="btn btn-success w-100">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
