import os, sys

def main():
    if len(sys.argv) < 4:
        print 'Usage: python rename.py path src dest'
        sys.exit()
    (path, src, dest) = sys.argv[1:4]
    for dirpath, dirnames, filenames in os.walk(path):
        dirpath = dirpath.replace('/', os.path.sep).replace('\\', os.path.sep)
        for filename in filenames:
            if filename.endswith(src):
                origin = os.path.join(dirpath, filename)
                renamed = os.path.join(dirpath, filename[0: len(filename) - len(src)] + dest)
                print origin + ' => ' + renamed
                os.rename(origin, renamed)


if __name__ == '__main__':
    main()