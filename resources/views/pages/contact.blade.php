  @include('partials._head')
  @include('partials._menu')
 <div class="container" style="margin-top: 12em;">
 <div class="row">
   <div class="col-md-12">
     <h2>Contact Us</h2><hr>
     <form action="/contact/sendMail" method="post">@csrf
       <div class="form-group">
         <label name="email">Email:</label>
         <input id="email" name="email" class="form-control">
       </div>

       <div class="form-group">
         <label name="subject">Subject:</label>
         <input id="subject" name="subject" class="form-control">
       </div>
       <div class="form-group">
         <label name="message">Message:</label>
         <textarea id="message" name="message" class="form-control">Type your text here...</textarea>
       </div>
       <input type="submit" value="Send Message" class="btn btn-success">
     </form>
   </div>
 </div>
</div>

</div><!--end of container-->

@include('partials._footer')
