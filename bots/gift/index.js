const commando = require('discord.js-commando');
const bot = new commando.Client();

bot.registry.registerGroup('random', 'Random');
bot.registry.registerDefaults();
bot.registry.registerCommandsIn(__dirname + '/commands');

bot.login('MzAyODE0Njc5MDg2OTIzNzc3.C9PM0A.X3FbYtoqAS0cNfzXVUD_NzTy3hw');
