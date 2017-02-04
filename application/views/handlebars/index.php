<?php $this->load->view('/partial/section_target'); ?>
<div id="container" class="container">
	<div id="body">
		<div class="row" style="padding-top: 75px;">
			<div id="content-placeholder"></div>
		</div>
	</div>
</div>

<script id="entry-template" type="text/x-handlebars-template">
	<div class="entry">
		<h1>{{title}}</h1>
		<div class="body">
			{{{body}}}
		</div>
	</div>
	{{#if people}}
		{{#with people}}
			<h2>{{firstName}}</h2>
		{{/with}}
	{{else}}
		<h2>Not found!!!</h2>
	{{/if}}

	{{#unless people}}
		{{#with people}}
			<h2>{{firstName}}</h2>
		{{/with}}
	{{else}}
		<h2>Not found!!!</h2>
	{{/unless}}

	{{#each peoples}}
		{{firstName}} - {{lastName}}</br>
	{{/each}}

	{{#link_to "contact" "Page"}}{{/link_to}}
	{{#list peoples}}{{firstName}} {{lastName}}{{/list}}

	<ul>
		{{#each items}}
		<li>{{agree_button "My Text" class="my-class" visible=true counter=4}}</li>
		{{/each}}
	</ul>

	<div class="post">
		{{> userMessage tagName="h1" }}

		<h1>Comments</h1>

		{{#each comments}}
		{{> userMessage tagName="h2" }}
		{{/each}}
	</div>

</script>

<script>
	var source   = $("#entry-template").html();

	Handlebars.registerHelper('link_to', function(url, name) {
		name = Handlebars.Utils.escapeExpression(name);
		url  = Handlebars.Utils.escapeExpression(url);

		var result = '<a href="' + url + '">' + name + '</a>';

		return new Handlebars.SafeString(result);
	});

	Handlebars.registerHelper('list', function(items, options) {
		var out = "<ul>";

		for(var i=0, l=items.length; i<l; i++) {
			out = out + "<li>" + options.fn(items[i]) + "</li>";
		}

		return out + "</ul>";
	});

	Handlebars.registerHelper('agree_button', function() {
		var emotion = Handlebars.escapeExpression(this.emotion),
		name = Handlebars.escapeExpression(this.name);

		return new Handlebars.SafeString(
			"<button>I agree. I " + emotion + " " + name + "</button>"
			);
	});

	Handlebars.registerPartial('userMessage',
		'<{{tagName}}>By {{author.firstName}} {{author.lastName}}</{{tagName}}>'
		+ '<div class="body">{{body_}}</div>');

	var template = Handlebars.compile(source);
	var context =	{	title: "My New Post",
						body: "<p>This is my first post!</p>",
						people:{
							firstName:'Sheldon',lastName:'Cooper'
						},
						peoples: [
							{firstName: "Yehuda", lastName: "Katz"},
							{firstName: "Carl", lastName: "Lerche"},
							{firstName: "Alan", lastName: "Johnson"}
						],
						items: [
							{name: "Handlebars", emotion: "love"},
							{name: "Mustache", emotion: "enjoy"},
							{name: "Ember", emotion: "want to learn"}
						],
						author: {firstName: "Alan", lastName: "Johnson"},
						body_: "I Love Handlebars",
						comments: [{
							author: {firstName: "Yehuda", lastName: "Katz"},
							body: "Me too!"
						}]
					};

	$("#content-placeholder").html(template(context));
</script>