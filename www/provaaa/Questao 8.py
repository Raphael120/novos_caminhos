
# def isLucky(n):
#     s = str(n)
#     pivot = len(s)//2
#     left, right = s[:pivot], s[pivot:]
#     return sum(map(int, left)) == sum(map(int, right))


def isLucky(n):
    n = [int(i) for i in str(n)]
    n_slice = len(n) // 2

    if sum(n[:n_slice]) == sum(n[n_slice : ]):
        return True
    else:
        return False

if __name__ == '__main__':

    n = "261534"

    print (isLucky(n))

    # RESPOSTA = FALSE