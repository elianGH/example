<section class="pagination">
    <div class="pagination__rows-per-page">
        <span class="pagination__rows-text">Rows per page:</span>
        <div class="mdc-select" id="main-table-select">
            <input type="hidden" name="enhanced-select">
            <i class="mdc-select__dropdown-icon"></i>
            <div class="mdc-select__selected-text"></div>
            <div class="mdc-select__menu mdc-menu mdc-menu-surface demo-width-class">
                <ul class="mdc-list">
                    <li class="mdc-list-item mdc-list-item--selected" data-value="10" aria-selected="true">
                        10
                    </li>
                    <li class="mdc-list-item" data-value="25">
                        25
                    </li>
                    <li class="mdc-list-item" data-value="50">
                        50
                    </li>
                    <li class="mdc-list-item" data-value="100">
                        100
                    </li>
                </ul>
            </div>
            <div class="mdc-line-ripple"></div>
        </div>
    </div>

    <div class="pagination__rows-count">
        <span>1-10</span>
        <span>of</span>
        <span>100</span>
    </div>

    <nav class="pagination__navigation">
        <a href="#" class="pagination__navigation-link">
            <i class="material-icons">
                keyboard_arrow_left
            </i>
        </a>
        <a href="#" class="pagination__navigation-link">
            <i class="material-icons">
                keyboard_arrow_right
            </i>
        </a>
    </nav>
</section>
