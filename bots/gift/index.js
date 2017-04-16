const commando = require('discord.js-commando');
const bot = new commando.Client();

bot.registry.registerGroup('random', 'Random');
bot.registry.registerGroup('img', 'img');
bot.registry.registerGroup('respond', 'respond');
bot.registry.registerDefaults();
bot.registry.registerCommandsIn(__dirname + '/commands');
bot.on('message', (message) => {
//  if (message.author.id == "218406106261749771") {
//    message.reply("Fuck off, Brage!");
//    console.log("it works");
//  } else if (message.author.id == "131541392852779009") {
//    console.log("it works2");
//  }
});



bot.login('MzAyODE0Njc5MDg2OTIzNzc3.C9PM0A.X3FbYtoqAS0cNfzXVUD_NzTy3hw');
