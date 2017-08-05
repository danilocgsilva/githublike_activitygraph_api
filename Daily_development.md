# 2017.08.02

Whats is a "Daily development" ?

Development ideas may come from chunks. Not all the system may be wondered and put in papper at once. So here, I will note all good development ideas.

## The final api output

Just a json!

## What is the main object scheme?

Think that the most fundamental piece as the *github printed cell*. Gray if the day is empty. Light green of some few activity. Dark green if lots of activity. Exact the same thing can be wondered to something like the Google Analytics graph. None activity, dot stuck to the ground. Few activity, dot a little higher. Much activity dot in the top.

Think that this information chunk can be parametrized to represent any kind of time interval. Githubs presents its a day. But can be a week, a month or even a hour, too.

At the final, lets think in the whole string graph. It must be a chain (array or list?) of the little objects that have same properties. Lets say, have the time value (can be something like hour, day, month), the kind of time itself (beign some enum that points to MONTH, DAY, HOUR, whatever), and maybe a position.


# 2017.08.05

Time to finish the firsts ever code!

## DateTime is the right variable type for time measure

The Cell object will holds a property that will be a DateTime. When you needs to know in what day something happens, the number of *30* won't be enough. You alse needs to know the month and the year. For the month, you needs to know also de the year (but not the day, or hour).
So, the DateTime objects always will holds a precise information until microseconds (!!!). But, you will needs to know until the precision the time you are requiring. For exemple, if you needs the year, just the *2017* will be enough, leaving all other information ignored. If you need the month, you also will needs the year, but the downwards information, like day or hour, can be ignored. If the matter is the day, the month and year also is required, but not the hour or minutes, and so on.

## The connector

The connector will play a big part of the system, although not being part of the core system. The core system itself will not be so large, once it will be just a *data normalizer* for some more generic data system.

The conector will be a system that catches the information from a source and translates to the core system objects.

For exemple, the most touchable example of something like this is a *new posts watcher* for a blogging system like WordPress.

The connector will have the role to read the WordPress database and translate into the Cell chunks information. So, if something gets the information of posting frequency in a month, the the connector will split to the core the chunk of information month by month about how many posts each month from a give period have. The connector shall split of the Cell object, or fill the Cell object with its information. Voilá!

So, will be good not to take much time to start a connector. Is the connector that will give a better idea on how the core system must be.

Check for the WordPressConnector of this commit. You can already check the first ever select from a WordPress database working. Just put the whole WordPressConector in a public apache folder and run. In the index, have local database configuration from development machine, so does not have problems in my privacy!
