<?php
$link_limit = 8;
?>

@if ($paginator->lastPage() > 1)
    <div class="ui right floated pagination menu small">
        <a href="{{ $paginator->url(1) }}"
           class="item {{ ($paginator->currentPage() == 1) ? 'disabled' : '' }}">
            <i class="angle double left icon"></i>
        </a>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links   = floor($link_limit / 2);
            $from               = $paginator->currentPage() - $half_total_links;
            $to                 = $paginator->currentPage() + $half_total_links;

            if ($paginator->currentPage() < $half_total_links) {
                $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <a href="{{ $paginator->url($i) }}"
                   class="item {{ ($paginator->currentPage() == $i) ? 'active' : '' }}">{{ $i }}</a>
            @endif
        @endfor
        <a href="{{ $paginator->url($paginator->lastPage()) }}"
           class="item {{ ($paginator->currentPage() == $paginator->lastPage()) ? 'disabled' : '' }}">
            <i class="angle double right icon"></i>
        </a>
    </div>
@endif
