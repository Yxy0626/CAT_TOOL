(function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.texts, function(tet) {
                return (!filter.source_text || tet.source_text.indexOf(filter.source_text)> -1)
                    && (!filter.target_text || tet.target_text.indexOf(filter.target_text)> -1)
            });
        },

        insertItem: function(insertingText) {
            this.texts.push(insertingText);
        },

        updateItem: function(updatingText) { },

        deleteItem: function(deletingText) {
            var textIndex = $.inArray(deletingText, this.texts);
            this.texts.splice(textIndex, 1);
        }

    };

    window.db = db;

    db.texts = [
        {
            "source_text": "hello",
            "target_text": "您好"
        },
		{
            "source_text": "apple",
            "target_text": "苹果"
        },
        
     ];

}());