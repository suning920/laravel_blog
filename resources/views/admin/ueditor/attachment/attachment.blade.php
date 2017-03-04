<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ueditor图片对话框</title>
    <script type="text/javascript" src="{{asset('plugins/ueditor/dialogs/internal.js')}}"></script>

    <!-- jquery -->
    <script type="text/javascript" src="{{asset('plugins/ueditor/third-party/jquery-1.10.2.min.js')}}"></script>

    <!-- webuploader -->
    <script type="text/javascript" src="{{asset('plugins/ueditor/third-party/webuploader/webuploader.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/ueditor/third-party/webuploader/webuploader.css')}}">

    <!-- attachment dialog -->
    <link rel="stylesheet" href="{{asset('plugins/ueditor/dialogs/attachment/attachment.css')}}" type="text/css" />
</head>
<body>

    <div class="wrapper">
        <div id="tabhead" class="tabhead">
            <span class="tab focus" data-content-id="upload"><var id="lang_tab_upload"></var></span>
            <span class="tab" data-content-id="online"><var id="lang_tab_online"></var></span>
        </div>
        <div id="tabbody" class="tabbody">
            <!-- 上传图片 -->
            <div id="upload" class="panel focus">
                <div id="queueList" class="queueList">
                    <div class="statusBar element-invisible">
                        <div class="progress">
                            <span class="text">0%</span>
                            <span class="percentage"></span>
                        </div><div class="info"></div>
                        <div class="btns">
                            <div id="filePickerBtn"></div>
                            <div class="uploadBtn"><var id="lang_start_upload"></var></div>
                        </div>
                    </div>
                    <div id="dndArea" class="placeholder">
                        <div class="filePickerContainer">
                            <div id="filePickerReady"></div>
                        </div>
                    </div>
                    <ul class="filelist element-invisible">
                        <li id="filePickerBlock" class="filePickerBlock"></li>
                    </ul>
                </div>
            </div>
            <!-- 在线图片 -->
            <div id="online" class="panel">
                <div id="fileList"><var id="lang_imgLoading"></var></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('plugins/ueditor/dialogs/attachment/attachment.js')}}"></script>
</body>
</html>