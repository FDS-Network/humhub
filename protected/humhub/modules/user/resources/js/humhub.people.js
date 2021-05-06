humhub.module('people', function(module, require, $) {

    const rotateCard = function(evt) {
        $(evt.$trigger).closest('.card > div').toggleClass('card-rotated');
    };

    const applyFilters = function(evt) {
        $(evt.$trigger).closest('form').submit();
    }

    module.export({
        rotateCard,
        applyFilters,
    });
});
