# How to use

```
<!-- Add Javascript -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="instagram.ywc.js"></script>

<!-- demo -->
<script>
new Instagram({
	clientId: 'API_KEY', // client id
	tagName: 'jwcth' // tag name
})
.feed(function(data){
	// return json data
	console.log(data);
}
});
</script>
```
