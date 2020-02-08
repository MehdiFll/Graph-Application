library(igraph);
N <- as.matrix(read.csv("matrix.csv",sep=";",header = FALSE),directed=TRUE);
g <- graph.adjacency(N, mode = "directed",weighted=TRUE);
png(filename="temp.png", width=800, height=800);
plot(g,vertex.color="lightblue");
dev.off()
