// Global jQuery pagination helper
// Intercepts clicks on links inside .pagination-container and replaces the
// nearest .ajax-paginated > .ajax-table and .pagination-container with
// the server response (so full page reloads are avoided).

console.log('[jquery-pagination] module loaded');

(function($){
    if (typeof $ === 'undefined') {
        console.log('[jquery-pagination] jQuery not found on window');
        return;
    }

    // Delegate click handler so it works for dynamically replaced pagination
    $(document).on('click', '.pagination-container a', function(e){
        var $link = $(this);
        // Find the nearest ajax-paginated parent container
        var $paginated = $link.closest('.ajax-paginated');
        // If pagination partial is outside the .ajax-paginated, try to locate
        if ($paginated.length === 0) {
            // Look for previous .ajax-paginated container in DOM
            $paginated = $link.closest('.pagination-container').prevAll('.ajax-paginated').first();
        }

        if ($paginated.length === 0) {
            // not an AJAX-aware container, let link work normally
            return;
        }

        var url = $link.attr('href');
        if (!url) return;

        e.preventDefault();

        // visual feedback
        $paginated.addClass('opacity-50');

        $.get(url, function(html){
            try {
                var $resp = $('<div>').append($.parseHTML(html));

                // Replace table area
                var $newTableWrapper = $resp.find('.ajax-table').first();
                if ($newTableWrapper.length) {
                    $paginated.find('.ajax-table').first().replaceWith($newTableWrapper);
                } else {
                    // fallback: replace tbody only
                    var $newTbody = $resp.find('tbody').first();
                    if ($newTbody.length) {
                        $paginated.find('tbody').first().replaceWith($newTbody);
                    }
                }

                // Replace pagination
                var $newPagination = $resp.find('.pagination-container').first();
                if ($newPagination.length) {
                    $paginated.find('.pagination-container').first().replaceWith($newPagination);
                }

                // Trigger a custom event so other modules can react
                $paginated.trigger('ajax:pagination:updated');

            } catch (err) {
                console.error('Error parsing pagination response', err);
            }
        }).fail(function(){
            // On failure, fall back to regular navigation
            window.location.href = url;
        }).always(function(){
            $paginated.removeClass('opacity-50');
        });

    });

})(window.jQuery || window.$);
