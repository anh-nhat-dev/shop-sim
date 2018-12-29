(function( $ ){

  $.fn.filemanager = function(type, options) {
    type = type || 'file';
   
    this.on('click', function(e) {
      var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
      localStorage.setItem('target_result', $(this).data('result'));
      window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
      window.SetUrl = function (url, file_path) {
          var target_result = $('#' + localStorage.getItem('target_result'));
          let count = target_result.children().length
          var container = $(`<div class="item-img" style="background: url(${url}) no-repeat center; background-size: cover"></div>`)
          var input = $(`<input type="hidden" name="thumbnail" value="${file_path}">`);
          container.append(input)
          target_result.html(container)
          window.isClose = false
      };
      return false;
    });
  }
})(jQuery);