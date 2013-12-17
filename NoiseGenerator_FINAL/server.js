var Twit = require('twit');

var T = new Twit({
	consumer_key: "ltl61Un5hQbfWqAvhKAeFA",
	consumer_secret: "aOMZ5ArhgwSB54ANF4z3GZBybsHE7c24lfuvMSmmuwU",
	access_token: "261324144-PwiYeR9Y09c3RN2msh1Sc5FxgTCCEsTU5ymHLDMM",
	access_token_secret: "15isqmeOJFTwU6w5MhKYScNR0L3xWfN3MCn9BBTmLbj2Z",
});

T.get('statuses/user_timeline', { screen_name: 'binaricorn'}, function(err, reply){
	for (i = 0; i < reply.length; i++){
		console.log(reply[i].text);
	}
});