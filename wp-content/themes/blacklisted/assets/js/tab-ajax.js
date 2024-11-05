jQuery(document).ready(function($) {
    // Handle tab clicks
    $('.tabs li').on('click', function() {
        var category = $(this).data('category');
        
        // Set active class on selected tab
        $('.tabs li').removeClass('active');
        $(this).addClass('active');
        
        // Show loading indicator or empty the panel
        $('#tab-panel').html('<p>Loading products...</p>');
        
        // Perform AJAX request to load products
        $.ajax({
            url: tab_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'load_category_products',
                category: category
            },
            success: function(response) {
                $('#tab-panel').html(response); // Replace tab content with products
            }
        });
    });
});
