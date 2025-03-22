<div class="pagination">
    <?php
    echo paginate_links([
        'total' => $query->max_num_pages,
        'prev_text' => __('« Previous', 'idm250-2025'),
        'next_text' => __('Next »', 'idm250-2025'),
    ]);
    ?>
</div>
