<!Doctype html>
<html lang="pl">
<head>
    <?php include_once 'partials/head.view.php' ?>
</head>
<body>
<div class="container">
    <header>
        <h1>Nowy produkt</h1>
    </header>
    <main>
        <div class="row">
            <div class="col">
                <a href="index.php?slug=products.index" class="btn btn-info mb-3">
                    Lista produktów
                </a>
            </div>
        </div>
        <form method="post">
            <div class="form-group">
                <label class="form-label">Nazwa</label>
                <input class="form-control" type="text" name="name" required>
            </div>
            <div class="form-group">
                <label class="form-label">Opis</label>
                <textarea class="form-control" maxlength="500" name="description"></textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Ilość</label>
                <input class="form-control" min="0" name="quantity">
            </div>
            <button class="btn btn-success mt-3" type="submit">Dodaj</button>
        </form>
    </main>
</div>
</body>
</html>

