        $(function () {
            var setItemContent = function(data){
                var item = $('#fansContent_type' + data.type);
                if (data.type === 5) { //热门圈子
                    var circle = data.info;
                    for (var i = 0; i < circle.length; i++) {
                        var html = '<a href="' + circle[i].url + '" title="' + (circle[i].title ? circle[i].title : '') + '" class="teamIcon" target="_blank"><img src="' + circle[i].image + '"></a>';
                        item.append(html);
                    }
                    return;
                }
                //焦点、活动、热帖、精华
                if(data.type === 1) {   //焦点区标题长度限制
                    var type1Title = data.title;
                    data.title = type1Title.length > 20 ? type1Title.slice(0, 20) + '...' : type1Title;
                }
                item.find('.postTitle').html(data.title);
                item.attr('href', data.url);
                item.find('.postDetail').html(data.content);
                if (data.image) { //焦点图
                    item.find('img').attr('src', data.image);
                }
            };
            //列表添加悬浮样式
            $(".activity,.hotPost,.hotCircle").mouseenter(function () {
                $(this).addClass('current');
            }).mouseleave(function () {
                $(this).removeClass('current');
            });

            $.ajax({
                url: 'http://web.sportsshequ.qq.com/tabHot/index',
                dataType: "jsonp",
                jsonpCallback: "fansTabCallback",
                success: function (json) {
                    if (json.code === "0") {
                        var data = json.data.list;
                        for (var i = 0; i < data.length; i++) {
                            setItemContent(data[i]);
                        }
                    }
                }
            });
        });