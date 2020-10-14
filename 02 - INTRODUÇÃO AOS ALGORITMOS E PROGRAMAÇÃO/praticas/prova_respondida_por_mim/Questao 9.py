

def sortByHeight(a):
    b = sorted([i for i in a if i!=-1])
    j = 0
    for i in range(len(a)):
        if a[i] == -1:
            pass
        else:
            a[i]=b[j]
            j+=1
    return a

if __name__ == '__main__':

    a= [23,54,-1,43,1,-1,-1,77,-1,-1,-1,3]

    print (sortByHeight(a))

    # RESPOSTA = [1, 3, -1, 23, 43, -1, -1, 54, -1, -1, -1, 77] ✅