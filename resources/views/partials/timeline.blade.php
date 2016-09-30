@extends('layouts.master')
@section('title','OOO')
@section('content')
    <section class="content-header">
        <h1>
            Timeline
            <small>example</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">UI</a></li>
            <li class="active">Timeline</li>
        </ol>
    </section>
    <section class="content">

        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-envelope bg-blue"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                            <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                quora plaxo ideeli hulu weebly balihoo...
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-xs">Read more</a>
                                <a class="btn btn-danger btn-xs">Delete</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-user bg-aqua"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-comments bg-yellow"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                            <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                            <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-video-camera bg-maroon"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                            <div class="timeline-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen="" frameborder="0"></iframe>
                                </div>
                            </div>
                            <div class="timeline-footer">
                                <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>
                </ul>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-code"></i> Timeline Markup</h3>
                    </div>
                    <div class="box-body">
                  <pre style="font-weight: 600;">&lt;ul class="timeline"&gt;

    &lt;!-- timeline time label --&gt;
    &lt;li class="time-label"&gt;
        &lt;span class="bg-red"&gt;
            10 Feb. 2014
        &lt;/span&gt;
    &lt;/li&gt;
    &lt;!-- /.timeline-label --&gt;

    &lt;!-- timeline item --&gt;
    &lt;li&gt;
        &lt;!-- timeline icon --&gt;
        &lt;i class="fa fa-envelope bg-blue"&gt;&lt;/i&gt;
        &lt;div class="timeline-item"&gt;
            &lt;span class="time"&gt;&lt;i class="fa fa-clock-o"&gt;&lt;/i&gt; 12:05&lt;/span&gt;

            &lt;h3 class="timeline-header"&gt;&lt;a href="#"&gt;Support Team&lt;/a&gt; ...&lt;/h3&gt;

            &lt;div class="timeline-body"&gt;
                ...
                Content goes here
            &lt;/div&gt;

            &lt;div class="timeline-footer"&gt;
                &lt;a class="btn btn-primary btn-xs"&gt;...&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;!-- END timeline item --&gt;

    ...

&lt;/ul&gt;
                  </pre>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
@endsection
@section('scripts')
@endsection