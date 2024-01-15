@section('title')
    Training Session
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('user-management.permissions.index') }}
@endsection


<!DOCTYPE html>
<html lang="en">
<head>
<title>Video</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
<link rel="stylesheet" type="text/css" href="/assets/training_session/style.css">
</head>
<body>
    
    <div class="user-call videp-call position-fixed w-100 h-100 top-0 start-0">
        <div class="top-section position-relative">
            <div class="caller-screen position-absolute top-0 start-0 w-100 h-100 pt-3">
                <div class="caller-screen-wrapper m-auto position-relative w-100 h-100">
                    <div class="user-caller front-caller d-flex justify-content-center align-items-center position-relative overflow-hidden h-100">
                        <div class="front-caller-video">
                            <img class="w-100 h-100" width="" height="" src="/assets/training_session/video-call.jpg" alt="" />
                        </div>
                        <div class="front-caller-hide-video circle-rounded position-relative">
                            <img class="w-100 h-100" width="" height="" src="/assets/training_session/video-call.jpg" alt="" />
                        </div>
                    </div>
                    <!--
                    <div class="user-caller back-caller position-absolute overflow-hidden">
                        <img class="w-100 h-100" width="" height="" src="back-caller.jpg" alt="" />
                        <div class="caller-name back-caller-name position-absolute">Caller Name Here</div>
                        <div class="voice-icon back-voice-icon position-absolute"><i class="fas fa-grip-lines-vertical"></i></div>
                    </div>
                    -->
                    <div class="caller-name front-caller-name position-absolute">AI Agent -- Training session #1</div>                    
                </div>
            </div>
            <div class="chat-screen position-absolute top-0 end-0 w-100 h-100 pt-3 pe-3">
                <div class="chat-screen-wrapper d-flex flex-column w-100 h-100">
                    <div class="chat-header d-flex justify-content-between align-items-center pb-5">
                        <div class="chat-header-title">AI Agent transcriptions</div>
                        <div class="chat-close"><i class="fas fa-times"></i></div>
                    </div>
                    <div class="chat-note text-center">Realtime transcriptions will appear once they are ready.</div>
                    <!--
                    <div class="chat-field-group d-flex justify-content-between align-items-center mt-auto">
                       <input type="text" value="" placeholder="Send message" />
                       <button><img width="" height="" src="send.svg" alt="" /></button>
                    </div>
-->
                </div>
            </div>
        </div>
        <div class="bottom-section d-flex justify-content-between align-items-center px-4">
            <div class="bottom-left d-flex align-items-center">
                <div class="call-button microphone-button"><i class="fas fa-microphone"></i></div>
                <div class="call-button end-button"><i class="fas fa-phone"></i></div>
            </div>
            <!--
            <div class="bottom-middle d-flex justify-content-center">
                <div class="call-button microphone-button"><i class="fas fa-microphone"></i></div>
                <div class="call-button end-button"><i class="fas fa-phone"></i></div>
            </div>
            -->
            <div class="bottom-right d-flex justify-content-end align-items-center">
                <div class="call-button chat-button"><i class="far fa-comment-alt"></i></div>
            </div>
        </div>      
    </div>
    <input id="_token" value="{!! csrf_token() !!}" type="hidden" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var urlParams = new URLSearchParams(window.location.search);
    const sessionId = urlParams.get('sessionId');
    console.log('session id ', sessionId);
    $(".video-button").click(function(){
        $(this).toggleClass('active');
        $(".top-section").toggleClass('hide-video');        
    });
    $(".end-button").click(function() {
        var url = '/training-session/end';
        var token = $("#_token").val();

        var dataJson = JSON.stringify( {sessionId : sessionId, _token: token} );
        var request = $.ajax({
            url: url,
            type: "POST",
            data: dataJson,
            dataType: "json",
            contentType: 'application/json'
        });

        request.done(function(data) {
            if (data.success) {
                // redirect user back to training sessions
                window.location.href = "/training-session/";
                return;
            }
            alert("Could not stop session. Please contact support.");
        });

        request.fail(function(jqXHR, textStatus) {
        });
    });
    $(".chat-button").click(function(){
        /*
        if ($(".top-section").hasClass('chat-screen-active')) {
            $(".top-section").removeClass('chat-screen-active');        
        } else {
            $(".top-section").addClass('chat-screen-active');        
        }
        */
        $(".top-section").toggleClass('chat-screen-active');
    });
    $(".chat-close").click(function(){
        $(".top-section").removeClass('chat-screen-active');        
    });

    // open chat by default
    $(".top-section").addClass('chat-screen-active');        
});
</script>
</body>
</html>



