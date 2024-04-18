<div class="row">
    <div class="col-md-12">
        <h3 class="column-title">We love to hear</h3>
        <p> <p> <a href={{ asset('files/Welcome-to-PRG-Projects.docx') }} > can you scrape this : file 3</a> </p> </p>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
        <form id="contactForm" action="#" method="post" role="form">
            <div class="error-container"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control form-control-name" name="name" id="name" placeholder=""
                            type="text" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control form-control-phone" name="phone" id="phone" placeholder=""
                            type="number" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Subject</label>
                        <input class="form-control form-control-subject" name="subject" id="subject" placeholder=""
                            required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
                    required></textarea>
            </div>
            {{-- <div id="contact-form-loader-wrapper">
                <div id="contact-form-loader"></div>
            </div> --}}
            <div class="text-right"><br>

                <button class="btn btn-primary solid blank" type="submit">Send Message</button>
            </div>
        </form>
    </div>

</div>
