import cv2
import header
import sys

path = r""+str(sys.argv[1])
image = cv2.imread(path,cv2.IMREAD_COLOR)

im1 = image.copy()
lines = header.detectLines(im1)

im2 = image.copy()
shapes = header.detect_shapes(im2)

header.detect_neigh(shapes,lines,image.shape)
header.create_pp(shapes)