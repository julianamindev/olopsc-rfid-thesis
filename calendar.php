<?php include('header.php'); ?>
      
      <div class="modal fade" id="aboutUs" tabindex="-1" role="dialog" aria-labelledby="aboutUsTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="aboutUsTitle"><strong>About</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-4 py-4">
                        <p class="mb-3">Lorem ipsum dolor amet pok pok twee gastropub mixtape YOLO taiyaki 90's scenester tbh
                            gluten-free lumbersexual hammock
                            swag man bun. Twee tacos bushwick, williamsburg four dollar toast locavore selfies chicharrones raw
                            denim next level
                            portland flexitarian viral cliche letterpress. Fashion axe chicharrones af gentrify. Vegan palo
                            santo keytar you
                            probably haven't heard of them fingerstache enamel pin snackwave chartreuse pok pok fixie cronut pug
                            brunch man braid
                            bicycle rights. Kombucha unicorn vaporware lomo. Williamsburg drinking vinegar locavore kickstarter
                            yuccie af. Health
                            goth deep v umami viral narwhal.</p>
                        <p>Unicorn cronut literally keffiyeh occupy. Mlkshk green juice bushwick, pabst fingerstache beard yr
                            chicharrones chambray
                            you probably haven't heard of them chillwave blue bottle. Master cleanse messenger bag kogi roof
                            party kinfolk.
                            Chillwave pork belly letterpress literally butcher pitchfork normcore tbh. DIY cold-pressed marfa
                            quinoa.</p>
                        <p>Lomo tacos man bun iceland franzen fixie kombucha migas four dollar toast vaporware umami DIY
                            locavore church-key irony.
                            Lo-fi fixie man bun hella, chartreuse raw denim live-edge activated charcoal put a bird on it
                            organic ethical you
                            probably haven't heard of them green juice adaptogen. Intelligentsia hexagon echo park, 90's organic
                            paleo la croix VHS
                            kombucha tilde irony brunch. Venmo hoodie everyday carry, keffiyeh letterpress put a bird on it jean
                            shorts hashtag
                            literally. Craft beer kickstarter man braid vape flexitarian drinking vinegar leggings tattooed lomo
                            palo santo PBR&B
                            YOLO. Air plant try-hard skateboard man bun thundercats kogi cloud bread hexagon franzen keytar
                            tacos palo santo poutine
                            tumblr you probably haven't heard of them.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include('nav.php'); ?>

    <div class="dashboard-container mx-auto mb-5">
        <!-- <div class=" search-bar my-5 ">
            <form>
                <div class="input-group">
                    <input type="number" class="form-control col-3" placeholder="Search Student ID">
                </div>
            </form>
        </div> -->
        <div class="row-grid mx-0" style="margin-top: 170px;">
            <div class="">
                <div class="card-dashboard  px-2 text-center">
                    <img src="assets/img/pexels-photo-220453.png" alt="" class="mb-3 mt-3" style="height: 80px;">
                    <section>
                        <h5 class="text-primary mb-2 pb-0">Patrick John</h5>
                        <p class="m-0 p-0 text-secondary"><small>143198377</small></p>
                        <p class="m-0 p-0 text-secondary"><small>COMPUTER SCIENCE</small></p>
                    </section>
                </div>
            </div>
            <div class="mx-3">
                <div class="card-dashboard p-5">
                    <div id='calendar'></div>
                </div>
            </div>
            <div class="w-100 text-center">
                <h5 class="mt-3">TIME LOG</h5>
                <div class="d-flex">
                    <ul class="list-group rounded-0 text-center w-100">
                        <li class="list-group-item disabled p-2 rounded-0" aria-disabled="true"><small><strong>Time In</strong></small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0 bg-red"><small>7:30am</small></li>
                        </ul>
                    <ul class="list-group rounded-0 text-center w-100 ">
                        <li class="list-group-item disabled p-2 rounded-0" aria-disabled="true"><small><strong>Time Out</strong></small></li>
                        <li class="list-group-item rounded-0"><small>4:30pm</small></li>
                        <li class="list-group-item rounded-0 bg-red"><small>5:30pm</small></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>


    <?php include('footer.php'); ?>
