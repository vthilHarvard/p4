#DWA-Fall 2015 Project 4
This is a Git repository for the fourth and final project of
##Author - Vani Thilagar

## Live URL
<http://p4.thilagar.me>

###Live demo
<https://youtu.be/L-XSTFhmns4>

###Short description
The project is called "America's kids got talent". This is an event registration system for a Children's talent show.
Users register with the site and by default they're registered as 'Registered'. __Jill and Jamal are the default registered users.__ Only a registered __user__ can create __item__'s for performance. So, one user can have many items.
### __Jessica__ is a third user and has the role of an 'Organizer'
*   My __user__ has the following added field:
    * role enum ('Registered'| 'Organizer'| 'Admin')

*   An __item__ has the following fields:
    * id
    * name of school
    * name of item
    * type of item enum ('Dance'| 'Music' | 'Skit')
    * Number of participants
    * URL link to audition media
    * Description
    * Status of the registration enum('Incomplete'| 'Submitted'| 'Approved' |'Rejected')

An __item__ is initially 'Incomplete' and can be edited by its creator until it is 'Submitted' to the organizer. Once submitted an __item__ cannot be edited.        
A guest user on the site can see all items but only a registered user can edit/delete his/her own item.
An organizer gets shown a different menu item under the __Items__ menu where he/she accepts('Accepted') or (Sigh!)rejects('Rejected') an item after review.

The list of all items and their status is publicly visible to all. But items for edit/delete are allowed for registered users only.
Organizer can only change the status of the registration and cannot modify them.

## __Strong I'm trying very hard to get another table in with the list of performers, if I do it'll be in this readme.md in the notes below and may not be in the video. Hopefully the menu will be clear for it __Strong

__All pages of the generated code validated in the w3.org validator__


###The brand image used in this project was from Wikimedia commons
<https:https://commons.wikimedia.org/wiki/File%3ABharatnatyam_logo.png>
### The performing kid's pictures are all family members ###

## Special note for work done after the video was created
