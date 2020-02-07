$(document).ready(function () {
    const myPaginator = new $('.paged').joldPaginator({
        'perPage': 10,
        'items': '.item',
        'paginator': '.pagination-container',
        'indicator': {
            'selector': '.pagination-indicator',
            'text': 'Showing item {start}-{end} of {total}',
        }
    })
});