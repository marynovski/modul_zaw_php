<!Doctype html>
<html lang="pl">
<head>
    <?php include_once 'partials/head.view.php' ?>
</head>
<body>
<div class="container">
    <header>
        <h1>Lista produktów</h1>
    </header>
    <main>
        <div class="row">
            <div class="col">
                <a href="index.php?slug=products.new" class="btn btn-success mb-3">
                    Nowy produkt
                </a>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Ilość</th>
            </tr>
            <?php if (empty($products)): ?>
                <tr>
                    <td class="text-center" colspan="4">Brak produktów w bazie.</td>
                </tr>
            <?php else: ?>
                <!-- Wyświetlanie produktu -->
            <?php endif; ?>
        </table>
    </main>
</div>
</body>
</html>

