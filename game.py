number=input("How many games do you want to add?")
startat=int(input("What id should the first one be?"))
i=0
addarray=[]
while i<int(number):
    i+=1
    thing="INSERT INTO \"games\" VALUES("
    thing=thing+str(startat)
    startat+=1
    thing=thing+",'"
    thing=thing+input("name: ")
    thing=thing+"',"
    thing=thing+input("low age: ")
    thing=thing+","
    thing=thing+input("high age: ")
    thing=thing+",'"
    thing=thing+input("type1: ")
    thing=thing+"','"
    thing=thing+input("type2: ")
    thing=thing+"','"
    thing=thing+input("type3: ")
    thing=thing+"','"
    thing=thing+input("price: ")
    thing=thing+"',"
    i1=0
    done=0
    while i1<10:
        if done==0:
            i1+=1
            thing=thing+"'"
            add=input("platform" + str(i1) + ": ")
            if add=="none":
                done=1
            thing=thing+add
            thing=thing+"',"
        else:
            thing=thing+"'none',"
            i1+=1
    thing=thing+"'"
    thing=thing+"images/"+input("image: ")
    thing=thing+"',"
    thing=thing+"'"
    thing=thing+input("url: ")
    thing=thing+"');"
    addarray.append(thing)
for item in addarray:
    print(item)
