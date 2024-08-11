<?php

if (isset($err)) { ?>

<div class="modal">
        <!--
        --    Modal trigger & modal overlay
        --    You don't have to change these guys, but they're
        --    required for the modal to work. Specially the
        --    modal-trigger should be placed at very top.
        -->
        <input type="checkbox" class="modal-trigger" id="modal">
        <label class="modal-overlay" for="modal"></label>

        <!--
        --      Button
        --      This is the button which will trigger the modal
        --      to open. It has to be a label tag but you can
        --      specify a class to style it as you wish.
        -->
        <label class="button" for="modal">
            Click to open
        </label>

        <!--
        --      Modal window
        --      This is where your content goes and will appear
        --      once the modal state is changed. Add your
        --      content inside the modal-container tag.
        -->
        <div class="modal-container">
          
            <!-- Start content -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Lorem ipsum dolor sit amet
                    </h3>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Accusantium, blanditiis commodi exercitationem, explicabo
                  fugit in, ipsum iure laborum molestiae nemo nisi
                  praesentium quia quidem recusandae sequi
                  soluta veniam vitae voluptatibus!
                </div>
                <div class="card-footer">
                    <label for="modal" class="item action">
                      Close
                    </label>
                </div>
            </div>
            <!-- End content -->
          
        </div>
    </div>

<?php } ?>

<a href="#lightbox-1" rel="lightbox">Open modal</a>

<div class="lightbox" id="lightbox-1">
    Content.

    <a class="lightbox__close" href="#">X</a>
</div>