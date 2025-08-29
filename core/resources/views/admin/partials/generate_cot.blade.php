<div id="cotModal" class="modal fade cron-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="cron-modal-header">
                    <div class="modal-header-top">
                        <h5 class="modal-title" id="exampleModalLongTitle"><i class="las la-calendar text--primary"></i> Generated COT </h5>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="form-group">
                    <h3 class="text-center">{{ $code }}</h3>
                </div>
            </div>

        </div>
    </div>
</div>

@push('style')
    <style>
        .cron-modal .modal-body {
            padding: 32px;
        }

        @media (max-width: 575px) {
            .cron-modal .modal-body {
                padding: 30px 15px;
            }
        }

        @media (max-width: 424px) {
            .cron-btn-group {
                flex-wrap: wrap;
            }

        }

        .cron-modal-header {
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid rgba(222, 226, 230, 1);
            display: flex;
            gap: 10px;
            justify-content: space-between
        }

        .modal-header-top .modal-title i {
            font-size: 20px;
            color: hsl(var(--primary));
        }

        .modal-header-top .modal-title {
            font-weight: 700;
            font-size: 1.125rem;
        }

        .form-control[readonly],
        .form-control[disabled] {
            background-color: rgba(246, 246, 246, 1);
            pointer-events: none;
            border: none;
            border-radius: 5px !important;
        }

        .copy-text-btn {
            position: absolute;
            top: 50%;
            right: 0px;
            background: transparent;
            border: none;
            font-weight: 600;
            transform: translateY(-50%);
            font-size: 14px;
            z-index: 99;
            height: 100%;
            background: #f6f6f6;
        }

        .copy-text-btn i {
            margin-right: 5px;
        }

        .form-control:focus {
            box-shadow: none;
        }
        .cron-btn-group a.h-45 {
            line-height: 2.3;
        }
    </style>
@endpush
@push('script')
    <script>
        (function($) {
            "use strict";

            $(document).on('click', '.copyCronPath', function() {
                var copyText = document.getElementById('cronPath');

                copyText.select();
                copyText.setSelectionRange(0, 99999);

                document.execCommand('copy');
                $(this).find('.copyText').text('Copied');
                setTimeout(() => {
                    $(this).find('.copyText').text('Copy');
                }, 2000);
            });


            @php
                $lastCron = Carbon\Carbon::parse(gs('last_cron'))->diffInSeconds();
            @endphp
            @if ($lastCron >= 900)
                setTimeout(() => {
                    $('#cronModal').modal('show');
                }, 1000);
            @endif

        })(jQuery)
    </script>
@endpush
