/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function ($) {
    $.fn.customPaginate = function (options)
    {
        var paginationContainer = this;
        var itemsToPaginateFound;
        
        var defaults = {
            itemsPerPage: 4
        };

        var settings = {};
        $.extend(settings, defaults, options);
        var itemsPerPage = settings.itemsPerPage;

        itemsToPaginateFound = $(settings.itemsToPaginateFound);
        var numberOfPaginationLinksFound = Math.ceil(((itemsToPaginateFound.length) / itemsPerPage));
        
        $("<ul></ul>").prependTo(paginationContainer);

        for (var index = 0; index < numberOfPaginationLinksFound; index++)
        {
            paginationContainer.find("ul").append("<li>" + (index + 1) + "</li>");
        }

        itemsToPaginateFound.filter(":gt(" + (itemsPerPage - 1) + ")").hide();
        paginationContainer.find("ul li").on('click', function () {
            var linkNumber = $(this).text();

            var itemsToHide = itemsToPaginateFound.filter(":lt(" + ((linkNumber - 1) * itemsPerPage) + ")");
                    $.merge(itemsToHide, itemsToPaginateFound.filter(":gt(" + ((linkNumber * itemsPerPage) - 1) + ")"));
            itemsToHide.hide();

            var itemsToShow = itemsToPaginateFound.not(itemsToHide);
            itemsToShow.show();
        });
    };
}(jQuery));

