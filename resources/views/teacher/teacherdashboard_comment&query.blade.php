
            <!-- yaha se hatan hey -->
            @extends('layouts.master_teacherdashboard')

           

            @push('title')
            <h2 class="fs-2 m-0">Teacher Dashboard</h2>
            @endpush
            @section('main-section')
            <div class="body" id="contentBody">
                <h2 class="px-4 hpart">Comment & Query</h2>
        </div>
        <section>
            <div class="card">
                <span class="title">Leave a Comment</span>
                <form class="form">
                  <div class="group">
                  <input placeholder="‎" type="text" required="">
                  <label for="name">Name</label>
                  </div>
              <div class="group">
                  <input placeholder="‎" type="email" id="email" name="email" required="">
                  <label for="email">Email</label>
                  </div>
              <div class="group">
                    <input placeholder="‎" type="text">
                    <label for="subject">Subject</label>
                    </div>
              <div class="group">
                  <textarea placeholder="‎" id="comment" name="comment" rows="5" required=""></textarea>
                  <label for="comment">Comment</label>
              </div>
                  <button class="button_1" type="submit">Submit</button>
                </form>
              </div>                  
        </section>
            @endsection
