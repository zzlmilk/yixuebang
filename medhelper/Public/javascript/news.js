function news(){


}

news.prototype.getNewsListByPage = function() {

	var news_current_page = parseInt($('#news_current_page').val())

	var url = base.getDomainUrl() + '/news/getNewsListByPage';

	var news_add_page = news_current_page + 1

	var news_type = $('#news_type').val()

	var formData = new FormData();

	formData.append('page',news_add_page);

	formData.append('type',news_type);

	$('#news_more_html').html('正在加载中....');

	base.ajax(url,'post',formData,function success(data){

		var data = base.parseJson(data)

		if(data['news_number'] == 0){

			$('#news_more_html').html('已经是最后1页了');

		} else{

			$('#news_more_html').html('更多');

			$('#news').append(data['news_html']);

			$('#news_current_page').val(news_add_page)
		}

	},function error(error){


	})


};

var news = new news();