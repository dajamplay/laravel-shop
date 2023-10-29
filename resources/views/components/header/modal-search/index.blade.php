<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content modal-bg-dark">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-search">
                    <span class="searchbox-info">Введите текст и нажмите Enter для поиска или ESC для выхода</span>
                    <form action="#" class="hm-searchbox">
                        <input type="text" name="Search..." value="Поиск..." onblur="if(this.value==''){this.value='Поиск...'}" onfocus="if(this.value=='Поиск...'){this.value=''}" autocomplete="off">
                        <button class="search-btn" type="submit" aria-label="searchbtn">
                            <i class="pe-7s-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
