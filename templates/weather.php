<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 py-5">
            <form action="" method="POST">
                <div class="card">
                    <div class="card-body">
                        <select class="form-select" id="city" name="city" aria-label="Lütfen seçin">
                            <option selected disabled>Şehirler..</option>
                            <?php
                            foreach (config('cities') as $city):?>
                            <option value="<?=slug($city.' turkey');?>"><?=$city;?></option>
                            <?php endforeach; ?>
                        </select>
                        <button class="btn mt-3 btn-primary">Havayı göster</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    if ($_POST) {
        $weather = new \App\Weather($_POST['city']);
        ?>
        <div class="container-fluid px-1 px-md-4 py-5 mx-auto">
            <div class="row d-flex justify-content-center px-3">
                <div class="col-md-6">
                    <div class="card bg-dark text-white">
                        <div class="card-body d-block position-relative">
                            <h2 class="text-end mt-3 mb-0"><?= mb_convert_case($weather->data->request->query, MB_CASE_TITLE); ?></h2>
                            <p class="text-end mr-4 mb-0"><?= implode(', ', $weather->data->current->weather_descriptions) ?></p>
                            <h1 class="mb-4 text-end"><?= $weather->data->current->temperature; ?>&#176;</h1>
                            <p class="mb-0 text-muted ml-4 mt-auto"><?= date('H:i'); ?></p>
                            <p class="ml-4 mb-4 text-muted"><?= date('l, d F Y') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
