<!DOCTYPE html>
<html lang="en">

<head>
    <title> Contoh Integrasi DYwhatsApp</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <section>
        <div class="container">
            <br><br>
            <h3>Sender form DYwhatsApp</h3>
            <br><br>
            <div class="row">
                <div class="col-6">
                    <form action="DYwhatsApp.php" method="POST">
                        <div class="form-group">
                            <label for="name"> Pilih Layanan :</label>
                            <select class="form-control" name="layanan">
                                <option value="DYwhatsApp">DYwhatsApp</option>
                                <option value="API Cekid">API Cekid</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name"> Nama Anda :</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama anda" required>
                        </div>
                        <div class="form-group">
                            <label for="nowa"> Nomor WhatsApp :</label>
                            <input type="number" class="form-control" name="nowa" placeholder="Nomor WhatsApp" required>
                        </div>
                        <div class="form-group">
                            <label for="note"> Catatan :</label>
                            <textarea type="note" class="form-control" name="note" placeholder="Catatan" rows="3"
                                required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>