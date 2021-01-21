<div class="py-5 bg-light border-bottom mb-3">
    <div class="py-5 container">
        <h1>İletişim</h1>
    </div>
</div>
<div class="container">
<div class="row justify-content-between">
    <div class="col-md-5">
        <form action="" method="post">
            <div class="form-group mb-2">
                <label>adınız:</label>
                <input type="text" required name="name" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label>e-postanız:</label>
                <input type="email" required name="email" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label>sorunuz:</label>
                <textarea name="message"  cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary">Gönder</button>
        </form>
    </div>
    <div class="col-md-5">
        <?php
            if($_POST){
                try {
                    $check = \App\Database::GetData('contacts',['name'=>'table exists']);
                }catch (Exception $exception){
                    if($exception->getCode() == "42S02"){
                        db()->query(file_get_contents(dirname(__DIR__).'/table.sql'));
                        $check = true;
                    }
                }
                if($check){
                    $insert = \App\Database::Insert('contacts',$_POST);
                    if($insert > 1) {
                        ?>
                        <div class="alert alert-success">
                            <h3>Başarılı!</h3>
                            <p>İletişim kaydınız bize iletildi teşekkürler</p>
                        </div>
                        <?php
                    }
                }
            }
        ?>
    </div>
</div>
</div>