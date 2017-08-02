# 2017.08.02

Whats is a "Daily development" ?

Development ideas may come from chunks. Not all the system may be wondered and put in papper at once. So here, I will note all good development ideas.

## The final api output

Just a json!

## What is the main object scheme?

Think that the most fundamental piece as the *github printed cell*. Gray if the day is empty. Light green of some few activity. Dark green if lots of activity. Exact the same thing can be wondered to something like the Google Analytics graph. None activity, dot stuck to the ground. Few activity, dot a little higher. Much activity dot in the top.

Think that this information chunk can be parametrized to represent any kind of time interval. Githubs presents its a day. But can be a week, a month or even a hour, to.

At the final, lets think in the whole string graph. It must be a chain (array or list?) of the little objects that have same properties. Lets say, have the time value (can be something like hour, day, month), the kind of time itself (beign some enum that points to MONTH, DAY, HOUR, whatever), and maybe a position.