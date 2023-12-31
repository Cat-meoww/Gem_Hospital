<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>
<style>
  #sample {
    margin-left: 5%;
    font-size: 14px;
    padding-left: 0;
    align-content: center;
    align-items: center;


  }

  .single-service .core-values .entry-value i::before {
    font-size: 12px;
    color: #61ce70;
    margin-right: 22px;

  }

  .hero-content {
    padding-bottom: 85px !important
  }

  .hero-title {
    margin-top: 60px;
  }

  .paragraph {
    font-weight: 700;
    font-size: 16px;
    line-height: 27px;
    color: var(--global--color-primary);
    margin-top: 10px;

  }

  .health-div1 {
    margin-top: 30px;
  }

  .health-head1 {
    color: var(--global--color-primary);
    letter-spacing: var(--e-global-typography-5d167aa-letter-spacing);
    word-spacing: var(--e-global-typography-5d167aa-word-spacing);
    font-size: 35px;
    font-family: var(--global--font-heading);

  }

  .btn-success {
    background-color: var(--global--color-primary);
  }

  .btn-success:hover {

    background-color: rgb(13, 62, 33);
    border-color: #146c43;
  }

  .health-div2 {
    width: 95%;
  }

  .health-head2 {
    font-family: var(--global--font-heading);
    font-size: 20px;
    color: #0D3E21;
  }

  .health-para2 {
    font-family: var(--global--font-heading);
    font-size: 30px !important;
    color: #118B0F;
    margin-left: 50px;

  }

  .health-poptx1 {
    height: 70px;
    overflow: hidden;
  }

  .book-1 {
    margin-left: 30px;
    margin-top: 30px;

  }

  .health-btn1 {
    font-size: 14px;
  }

  .health-head3 {
    text-align: center;
    font-weight: 500;
  }

  .health-para3 {
    text-align: center;
  }

  .health-span1 {
    font-weight: 700;
    font-size: 16px;
    line-height: 27px;
    color: var(--global--color-primary);
  }

  .health-ul1 {
    margin-left: 10px;
  }

  .health-ul2 {
    margin-left: 30px;
  }

  .health-para4 {
    font-family: var(--global--font-heading);
    font-size: 30px !important;
    color: #118B0F;
    margin-left: 85px;
  }

  .book-2 {
    margin-left: 70px;
    margin-top: 30px;
  }

  .health-ul3 {
    margin-left: 20px;

  }

  .health-ul4 {
    margin-left: 40px;

  }

  .health-para5 {
    font-family: var(--global--font-heading);
    font-size: 30px !important;
    color: #118B0F;
    margin-left: 80px;
  }

  .book-3 {
    margin-left: 60px;
    margin-top: 30px;
  }

  .health-ul5 {
    margin-left: 10px;
  }

  .health-ul6 {
    margin-left: 30px;
  }

  .book-4 {
    margin-left: 60px;
    margin-top: 30px;
  }

  .pop-z {
    z-index: 9999;
  }

  @media screen and (max-width:600px) {
    .bn-book {
      position: absolute;
      right: 120px;
      bottom: 20px;



    }

    .book-1 {
      margin-left: 60px !important;
    }

    .fa-check,
    .content-span {
      display: flex;
      flex-direction: row;
    }

    .check1,
    .content-span1 {
      display: flex;
      flex-direction: row;
      margin-left: -5px;

    }

    .check2,
    .content-span2 {
      display: flex;
      flex-direction: row;
      margin-left: -15px;

    }

    .check3,
    .content-span3 {
      display: flex;
      flex-direction: row;
      margin-left: 5px;


    }

    .check4,
    .content-span4 {
      display: flex;
      flex-direction: row;
      margin-left: 0px;


    }

    .check5,
    .content-span5 {
      display: flex;
      flex-direction: row;
      margin-left: -5px;


    }

    .check6,
    .content-span6 {
      display: flex;
      flex-direction: row;
      margin-left: -15px;


    }

    p .health-amt {
      display: flex;
      flex-direction: row;
      margin-left: 15%;

    }

    p .health-amt1 {
      display: flex;
      flex-direction: row;
      margin-left: 1%;

    }

    p .health-amt2 {
      display: flex;
      flex-direction: row;
      margin-left: 5%;

    }

    p .health-amt3 {
      display: flex;
      flex-direction: row;
      margin-left: 3%;

    }

    .lab {
      float: left;
    }


  }
</style>


<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
  <div class="bg-section">
    <img src=" <?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" />
  </div>
  <div class="container">
    <div class="hero-content">
      <div class="row">
        <div class="col-12 col-lg-5">
          <h2 class="hero-title">
            Master Health Checkup
          </h2>
          <p class="hero-desc">Caring For The Health Of You And Your Family.</p>


          <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
        </div>
        <div class="col-12 health-div1">
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
            <li class=""><a href="<?= base_url('health-package') ?>">Health Package</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<!--
      ============================
      Pricing Table Section
      ============================
	  
      -->
<section class="color-heading">
  <div class="container pt-2">


    <p class="paragraph">Pricing</p>

    <div class="d-flex justify-content-between health-div1 ">


      <h2 class="health-head1">HealthPackages</h2>


    </div>





  </div>


</section>


<section class="single-service pt-2" id="sample">
  <div class="entry-infos core-values">

    <!---<p class="entry-desc">Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes for all through a comprehensive medical research. For over 20 years, our hospital has touched lives of millions of people, and provide care and treatment for the sickest in our community including rehabilitation and aged care.</p>--->
    <div class="color-heading">
      <div class="health-div2">
        <div class="entry-value"><i class=""></i>
          <div class="entry-content">
            <!--<h5>medical check ups</h5>-->

            <div class="row align-items-center">
              <div class="col-12 col-md-3">

                <h2 class="health-head2">Express Health Checkup</h2>

              </div>

              <div class="col-12 col-md-8 row">
                <div class="col-12 col-md-6">
                  <ul class="list-unstyled advantages">
                    <li><span class="content-span"><i class="fas fa-check"></i>Haemoglobin</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>Total Count</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>Differential Count</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>Platelet Count</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>Blood Sugar</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>HBA1C</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>Cardiology & Dietician Consultation</span></li>
                  </ul>
                </div>
                <div class="col-12 col-md-6">
                  <ul class="list-unstyled advantages">
                    <li><span class="content-span"><i class="fas fa-check"></i>Urea</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>Creatinine</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>Viral Markers(Hep B & Anti HCV)</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>Liver Function Test</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>Lipid Profile test</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>USG Abdomen</span></li>
                    <li><span class="content-span"><i class="fas fa-check"></i>ECG</span></li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-1">
                <p class="health-para2"><span class="health-amt">Rs.3750</span></p>

                <button type="button" class="btn btn--primary btn-line btn-line-before book-1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Book Now</button>
                <div class="modal fade pop-z" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa health-btn1">&#xf00d;</i>
                        </button>
                        <h4 class="heading-title health-head3">Express Health Checkup Booking Form</h4>
                        <p class="desc health-para3">Fill out the form below, and we will be in touch shortly.</p>
                        <form>
                          <div class="form-group">
                            <label class="lab">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" required />
                          </div>

                          <!-- Form Group -->
                          <div class="form-group">
                            <label class="lab">Phone Number</label>
                            <input type="phonenumber" class="form-control" placeholder="Enter Your Phone Number" required />
                          </div>
                          <div class="form-group">
                            <label class="lab">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" required />
                          </div>
                          <div class="form-group">
                            <label class="lab">Comment</label><br>
                            <textarea class="form-control health-poptx1" placeholder="Enter Your Comment"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn--primary btn-line btn-line-before">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>

      <div class="health-div2">
        <div class="entry-value"><i class=""></i>
          <div class="entry-content">
            <!--<h5>medical check ups</h5>-->

            <div class="row align-items-center">
              <div class="col-12 col-md-3">

                <h2 class="health-head2">Cancer Screening For Male<br> <span class="health-span1"> (Everything in Express <br>Health Checkup plus)</span></h2>

              </div>

              <div class="col-12 col-md-8 row">

                <div class="col-12 col-md-6">

                  <ul class="list-unstyled advantages health-ul1">
                    <li><span class="content-span1"><i class="fas fa-check check1"></i>Carcinoembryonic Antigen</span></li>
                    <li><span class="content-span1"><i class="fas fa-check check1"></i>Prostate-Specific Antigen</span></li>


                  </ul>
                </div>
                <div class="col-12 col-md-6">
                  <ul class="list-unstyled advantages health-ul2">
                    <li><span class="content-span2"><i class="fas fa-check check2"></i>CA 19.9</span></li>
                    <li><span class="content-span2"><i class="fas fa-check check2"></i>Stool Occult blood</span></li>

                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-1">
                <p class="health-para4"><span class="health-amt1">Rs.7000</span></p>
                <button type="button" class="btn btn--primary btn-line btn-line-before book-2" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Book Now</button>
                <div class="modal fade pop-z" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa health-btn1">&#xf00d;</i>
                        </button>
                        <h4 class="heading-title health-head3">Cancer Screening For Male Include Express Health Checkup</h4>
                        <p class="desc health-para3">Fill out the form below, and we will be in touch shortly.</p>
                        <form>
                          <div class="form-group">
                            <label class="lab">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" required />
                          </div>

                          <!-- Form Group -->
                          <div class="form-group">
                            <label class="lab">Phone Number</label>
                            <input type="phonenumber" class="form-control" placeholder="Enter Your Phone Number" required />
                          </div>
                          <div class="form-group">
                            <label class="lab">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" required />
                          </div>
                          <div class="form-group">
                            <label class="lab">Comment</label><br>
                            <textarea class="form-control health-poptx1 " placeholder="Enter Your Comment"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn--primary btn-line btn-line-before">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>

      <div class="health-div2">
        <div class="entry-value"><i class=""></i>
          <div class="entry-content">
            <!--<h5>medical check ups</h5>-->

            <div class="row align-items-center">
              <div class="col-12 col-md-3">

                <h2 class="health-head2">Cancer Screening For Female <br> <span class="health-span1"> (Everything in Express <br>Health Checkup plus)</span></h2>

              </div>

              <div class="col-12 col-md-8 row">

                <div class="col-12 col-md-6">
                  <ul class="list-unstyled advantages health-ul3">
                    <li><span class="content-span5"><i class="fas fa-check check5"></i>

                        CA 125</span></li>
                    <li><span class="content-span5"><i class="fas fa-check check5"></i>
                        Papsmear</span></li>
                    <li><span class="content-span5"><i class="fas fa-check check5"></i>
                        USG Breast Screening</span></li>


                  </ul>
                </div>
                <div class="col-12 col-md-6">
                  <ul class="list-unstyled advantages health-ul4">
                    <li><span class="content-span6"><i class="fas fa-check check6"></i>
                        Gynecologist</span></li>
                    <li><span class="content-span6"><i class="fas fa-check check6"></i>
                        Stool Occult blood</span></li>

                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-1">
                <p class="health-para5"><span class="health-amt2">Rs.7000</span></p>
                <button type="button" class="btn btn--primary btn-line btn-line-before book-3" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Book Now</button>
                <div class="modal fade pop-z" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa health-btn1">&#xf00d;</i>
                        </button>
                        <h4 class="heading-title health-head3"> Cancer Screening For Male Include Express Health Checkup</h4>
                        <p class="desc health-para3">Fill out the form below, and we will be in touch shortly.</p>
                        <form>
                          <div class="form-group">
                            <label class="lab">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" required />
                          </div>

                          <!-- Form Group -->
                          <div class="form-group">
                            <label class="lab">Phone Number</label>
                            <input type="phonenumber" class="form-control" placeholder="Enter Your Phone Number" required />
                          </div>
                          <div class="form-group">
                            <label class="lab">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" required />
                          </div>
                          <div class="form-group">
                            <label class="lab">Comment</label><br>
                            <textarea class="form-control health-poptx1" placeholder="Enter Your Comment"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn--primary btn-line btn-line-before">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>
      <div class="health-div2">
        <div class="entry-value"><i class=""></i>
          <div class="entry-content">
            <!--<h5>medical check ups</h5>-->

            <div class="row align-items-center">
              <div class="col-12 col-md-3">

                <h2 class="health-head2">Bottom Care
                  checkup</h2>

              </div>

              <div class="col-12 col-md-8 row">

                <div class="col-12 col-md-6">

                  <ul class="list-unstyled advantages health-ul5">
                    <li><span class="content-span1"><i class="fas fa-check check1"></i>OP Routine</span></li>
                    <li><span class="content-span1"><i class="fas fa-check check1"></i>
                        Proctoscopy</span></li>
                    <li><span class="content-span1"><i class="fas fa-check check1"></i>
                        Colorectal Specialist Consultation</span></li>


                  </ul>
                </div>
                <div class="col-12 col-md-6">
                  <ul class="list-unstyled advantages health-ul6">
                    <li><span class="content-span2"><i class="fas fa-check check2"></i>Dietician Consultation</span></li>
                    <li><span class="content-span2"><i class="fas fa-check check2"></i>
                        Stool Occult blood</span></li>

                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-1">
                <p class="health-para4"><span class="health-amt3">Rs.1500</span></p>
                <button type="button" class="btn btn--primary btn-line btn-line-before book-4" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@mdo">Book Now</button>
                <div class="modal fade pop-z" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa health-btn1 ">&#xf00d;</i>
                        </button>
                        <h4 class="heading-title health-head3">Bottom Care Checkup Booking Form</h4>
                        <p class="desc health-para3">Fill out the form below, and we will be in touch shortly.</p>
                        <form>
                          <div class="form-group">
                            <label class="lab">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" required />
                          </div>

                          <!-- Form Group -->
                          <div class="form-group">
                            <label class="lab">Phone Number</label>
                            <input type="phonenumber" class="form-control" placeholder="Enter Your Phone Number" required />
                          </div>
                          <div class="form-group">
                            <label class="lab">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" required />
                          </div>
                          <div class="form-group">
                            <label class="lab">Comment</label><br>
                            <textarea class="form-control health-poptx1" placeholder="Enter Your Comment"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn--primary btn-line btn-line-before">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>




    </div>
  </div>
</section>





<section class="donations donations-2 pt-1" id="donations-2">
  <div class="container">
    <div class="heading heading-4">
      <div class="row">
        <div class="col-12 col-lg-5">
          <p class="paragraph">FAQ</p>
          <h2 class="heading-title">Frequently Asked Question</h2>

        </div>
        <div class="col-12 col-lg-6 offset-lg-1">
          <!--<p class="paragraph">Our staff strives to make each interaction with patients clear, concise, and inviting. Support them important work of Medicsh Hospital by making a much-needed donation today.</p>
                <p class="heading-desc">We will work with you to develop individualised care plans, including management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of practitioner you require. We treat all enquiries sensitively and in the strictest confidence.</p>--->
          <div class="accordion" id="accordion03">
            <div class="card">
              <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Why is the
                  Master Health Checkup For Gastro important?</a></div>
              <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                <div class="card-body color-heading">A gastro health check up helps in the early detection, prevention and
                  management of gastro intestinal disorders and diseases. It allows healthcare professional to
                  identify any abnormalities, such as ulcers, polyps, tumors, or the inflammation in the digestive
                  system and take appropriate measure or treatment or further investigations.</div>
              </div>
            </div>
            <div class="card">
              <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">Can I eat or
                  drink anything before checkup? </a></div>
              <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                <div class="card-body color-heading">In some cases, you will be required to fast for a specific duration before the
                  checkup.</div>
              </div>
            </div>
            <div class="card">
              <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">How will I receive the
                  results? </a></div>
              <div class="collapse " id="collapse01-3" data-bs-parent="#accordion03">
                <div class="card-body color-heading">Our staff strives to make each interaction with patients clear, concise, and
                  inviting. Support the important work of Medicsh Hospital by making a much-needed donation today. We
                  will work with you to develop individualised care plans, including management of chronic diseases.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">How long does
                  a master health checkup for gastro take? </a></div>
              <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                <div class="card-body color-heading">The duration of a gastro health checkup vary depending on the tests included.
                  It may take a few hours or even a full day to complete all the necessary test and procedure.</div>
              </div>
            </div>
          </div><!--<a class="btn btn--primary" href="contact.html">make a gift <i class="fas fa-heart"></i></a>--->
        </div>
      </div>
      <!-- End .row-->
    </div>
    <!-- End .heading-->
  </div>
  <!-- End .container-->
</section>

</div>
</div>
<!-- End .contact-panel-->
</div>
</div>
<!-- End .row -->
</div>
<!-- End .container-->
</section>




<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>