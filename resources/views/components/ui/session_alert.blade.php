@props([
    'message' => null,
    'color' => 'success'
])

@if(session($message))
    <script type="text/javascript">
        $(document).ready(function () {
            $('#msgModal').modal('show');
        });
    </script>

    <!-- Modal -->
    <div class="modal" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                    </h5>
                    <button type="button" class="btn-close btn" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="session-message-text">{{ session($message) }}</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-pronia-primary" data-bs-dismiss="modal">{{__('Закрыть')}}</button>
                </div>
            </div>
        </div>
    </div>
@endif
