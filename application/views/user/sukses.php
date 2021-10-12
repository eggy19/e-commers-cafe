<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">

            <div class="col-md-8 p-b-30">
                <h2 class="m-text26 p-t-15 p-b-16">
                    Pesanan anda sukses
                </h2>
                
                <?php
                    if ($this->session->flashdata('sukses')
                    ) {
                        echo    '<div class="alert alert-success">';
                        echo    $this->session->flashdata('sukses');
                        echo    '</div>';
                    }
                ?>
                
                <div class="bo13 p-l-29 m-l-9 p-b-10">
                    <p class="p-b-11">
                        Operator akan segera menghampiri mu, siapkan uang untuk pembayaran pesanan anda. Pesanan akan di proses setelah pembayaran selesai
                    </p>

                    <span class="s-text7">
                        - Admin
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>