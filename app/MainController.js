angular.module("myApp").controller("DigitalWhiteboard", function($scope) {
    $scope.models = [
        {listName: "DC1", items: [], dragging: false},
        {listName: "DC2", items: [], dragging: false}
    ];
    
    /**
    * Send an array of all selected items
    */
    $scope.getSelectedItemsIncluding = function(list, item){
        item.selected = true;
        return list.items.filter(function(item)) { return item.selected; });
    };
    
    /**
    * set the list into dragging state
    */
    $scope.onDragstart = function(list, event) {
        list.dragging = true;
        if (event.dataTransfer.setDragImage) {
            var img = new Image();
            img.src = 'framework/vendor/ic_content_copy_black_24dp_2x.png';
            event.dataTransfer.setDragImage(img, 0, 0);
        }
    };
    
    /**
    * handle the insertion
    */
    $scope.onDrop = function(list, items, index){
        angular.forEach(items, function(item) { item.selected = false;});
        list.items = list.items.slice(0, index)
                    .concat(items)
                    .concat(list.items.slice(index));
        return true;
    }
    
    
})